<?php

namespace NenMvc\Web;

use Nen\Http\RequestInterface;
use Nen\Http\ResponseInterface;
use Nen\Web\Controller as NenController;
use NenMvc\View\ViewInterface;

/**
 * Class Controller
 */
class Controller extends NenController
{
    /**
     * @var ViewInterface
     */
    protected $view;

    /**
     * Controller constructor.
     *
     * @param RequestInterface $request
     * @param ResponseInterface $response
     * @param ViewInterface $view
     */
    public function __construct(
        RequestInterface $request,
        ResponseInterface $response,
        ViewInterface $view
    )
    {
        parent::__construct($request, $response);

        $this->view = $view;
    }
}