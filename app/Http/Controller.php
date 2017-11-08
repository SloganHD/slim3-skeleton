<?php

namespace App\Http;


Abstract class Controller
{

	public $request;
	public $response;
	public $logger;
	public $view;

	/**
	 * @param \Psr\Http\Message\ServerRequestInterface $request
	 * @param \Psr\Http\Message\ResponseInterface $response
	 * @param \League\Plates\Engine $view
	 * @param \Psr\Log\LoggerInterface $logger
	 */
	public function __construct($request, $response, $view, $logger = null)
	{
		$this->request = $request;
		$this->response = $response;
		$this->logger = $logger;
		$this->view = $view;
	}

}