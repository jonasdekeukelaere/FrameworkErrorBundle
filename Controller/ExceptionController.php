<?php

namespace SumoCoders\FrameworkErrorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\FlattenException;
use Symfony\Component\HttpKernel\Log\DebugLoggerInterface;

class ExceptionController extends Controller
{
    public function showExceptionAction(
        Request $request,
        FlattenException $exception,
        DebugLoggerInterface $logger = null
    ) {
        $data = array(
            'status_code' => $exception->getStatusCode(),
            'status_text' => $exception->getMessage(),
        );

        return $this->render(
            '::error.html.twig',
            $data
        );
    }
}