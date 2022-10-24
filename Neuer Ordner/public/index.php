<?php
    header("Content-Type: application/json");

    use Psr\Http\Message\ResponseInterface as Response; 
    use Psr\Http\Message\ServerRequestInterface as Request;
    use Slim\Factory\AppFactory;
    use ReallySimpleJWT\Token;

    require __DIR__ . "/../vendor/autoload.php";
    require "model/event.php";
    require "config/config.php";

    $app = AppFactory::create();

    $app->post("/Authenticate", function (Request $request, Response $response, $args) {
		global $api_username;
		global $api_password;

		$request_body_string = file_get_contents("php://input");

		$request_data = json_decode($request_body_string, true);

		$username = $request_data["username"];
		$password = $request_data["password"];

		if ($username != $api_username || $password != $api_password) {
			$error = array("message" => "Invalid credentials.");
			echo json_encode($error);

			http_response_code(401);
			die();
		}

		$token = Token::create($username, $password, time() + 3600, "localhost");

		setcookie("token", $token);

		echo "true";

		return $response;
	});

    $app->post("/Event", function (Request $request, Response $response, $args) {
		require "controller/require_authentication.php";

		$request_body_string = file_get_contents("php://input");

		$request_data = json_decode($request_body_string, true);

		if (!isset($request_data["name"]) || empty($request_data["name"])) {
			$error = array("message" => "Please provide a name.");
			echo json_encode($error);

			http_response_code(400);
			die();
		}
		if (!isset($request_data["age"]) || !is_numeric($request_data["age"])) {
			$error = array("message" => "Please provide an integer number for the age.");
			echo json_encode($error);

			http_response_code(400);
			die();
		}
        if (!isset($request_data["dinner"]) || !empty($request_data["dinner"])) {
			$error = array("message" => "Please provide an dinner for the event.");
			echo json_encode($error);

			http_response_code(400);
			die();
		}

		$name = $request_data["name"];
		$age = $request_data["age"];
        $dinner = $request_data["dinner"];

		if (strlen($name) > 250) {
			$error = array("message" => "The name is too long. Please enter less than or equal to 250 characters.");
			echo json_encode($error);

			http_response_code(400);
			die();
		}

		if ($age < 0 || $age > 200) {
			$error = array("message" => "The age must be between 0 and 200 years.");
			echo json_encode($error);

			http_response_code(400);
			die();
		}

		if (is_float($age)) {
			$error = array("message" => "The age must not have decimals.");
			echo json_encode($error);

			http_response_code(400);
			die();
		}

        if (strlen($dinner) > 500) {
			$error = array("message" => "The dinner name is too long. Please enter less than or equal to 500 characters.");
			echo json_encode($error);

			http_response_code(400);
			die();
		}

		create_new_invited($name, $age, $dinner);

		return $response;
	});

    $app->get("/Event/{invited_id}", function (Request $request, Response $response, $args) {
		require "controller/require_authentification.php";

		$invited_id = $args["invited_id"];

		$invited = get_student($invited_id);

		if ($invited) {
			echo json_encode($invited);
		}

		return $response;
	});

    $app->put("/Event/{invited_id}", function (Request $request, Response $response, $args) {
		require "controller/require_authentification.php";
		
        $invited_id = $args["invited_id"];

		$request_body_string = file_get_contents("php://input");

		$request_data = json_decode($request_body_string, true);

		update_invited($request_data["name"], $request_data["age"], $request_data["dinner"]);
		
    });

    $app->delete("/Event/{invited_id}", function (Request $request, Response $response, $args) {
		require "controller/require_authentification.php";

        $invited_id = $args["invited_id"];

		remove_invited($invited_id);
    });

    $app->run();
    ?>