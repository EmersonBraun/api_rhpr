<?php

function getUserByToken ($token)
{
    try {
        $obj = \JWTAuth::toUser($token);
        $response = $obj ?? [];
    } catch (\Throwable $th) {
        $contentError = $th->getMessage();
        $response = [];
    } 

    return $response;
}