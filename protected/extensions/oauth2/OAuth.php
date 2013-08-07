<?php
/**
 * 
 * 
 * 
 */
require_once dirname(__file__) . DIRECTORY_SEPARATOR . 'OAuth2/Autoloader.php';
class OAuth
{
    //connect to db by pdo
    private $storage;
    //server
    private $server;
	//config
	private $config;
    /**
     * @param array $connection for pdo
     */
    public function __construct($connect)
    {
		//$this->_config=require_once dirname(). DIRECTORY_SEPARATOR .'config/config.php';
        OAuth2\Autoloader::register();
        $this->storage = new OAuth2\Storage\Pdo($connect);
        $this->server = new OAuth2\Server($this->storage);
        $this->server->addGrantType(new OAuth2\GrantType\ClientCredentials($this->storage));

        // Add the "Authorization Code" grant type (this is where the oauth magic happens)
        $this->server->addGrantType(new OAuth2\GrantType\AuthorizationCode($this->storage));
    }
	
	
    /**
     * @return string token code
     */
	 
    public function token()
    {
        // Handle a request for an OAuth2.0 Access Token and send the response to the client
        $this->server->handleTokenRequest(OAuth2\Request::createFromGlobals())->send();
    }
    /**
     * return access code
     */
    public function authorize()
    {
        $request = OAuth2\Request::createFromGlobals();
        $response = new OAuth2\Response();

        // validate the authorize request
        if (!$this->server->validateAuthorizeRequest($request, $response)) {
            $response->send();
            die;
        }
        // display an authorization form
        if (empty($_POST)) {
            exit('
<form method="post">
  <label>Do You Authorize TestClient?</label><br />
  <input type="submit" name="authorized" value="yes">
  <input type="submit" name="authorized" value="no">
</form>');
        }

        // print the authorization code if the user has authorized your client
        $is_authorized = ($_POST['authorized'] === 'yes');
        $this->server->handleAuthorizeRequest($request, $response, $is_authorized);
        if ($is_authorized) {
            // this is only here so that you get to see your code in the cURL request. Otherwise, we'd redirect back to the client
            $code = substr($response->getHttpHeader('Location'), strpos($response->
                getHttpHeader('Location'), 'code=') + 5, 40);
            exit("SUCCESS! Authorization Code: $code");
        }
        $response->send();
    }
}
