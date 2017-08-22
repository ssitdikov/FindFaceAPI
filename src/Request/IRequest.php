<?php


namespace SSitdikov\FindFaceAPI\Request;


interface IRequest extends \JsonSerializable
{

    const POST = 'POST';
    const GET = 'GET';
    const DELETE = 'DELETE';
    const PUT = 'PUT';

    public function getPath($path);
    public function getMethod();
}