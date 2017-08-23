<?php


namespace SSitdikov\FindFaceAPI\Request;


interface IRequest
{

    const POST = 'POST';
    const GET = 'GET';
    const DELETE = 'DELETE';
    const PUT = 'PUT';

    public function getPath(): string;
    public function getMethod(): string;
    public function getOptions(): array;
}