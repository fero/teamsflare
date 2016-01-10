<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Response;
use Symfony\Component\HttpFoundation\Response as IlluminateResponse;

class ApiController extends Controller
{
    /**
     * @var int
     */
    protected $statusCode = IlluminateResponse::HTTP_OK;

    /**
     * @return mixed
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }

    /**
     * @param $statusCode
     * @return $this
     */
    public function setStatusCode($statusCode)
    {
        $this->statusCode = $statusCode;

        return $this;
    }

    /**
     * @param string $message
     * @return mixed
     */
    public function respondNotFound($message = "Not found!")
    {
        return $this->setStatusCode(IlluminateResponse::HTTP_NOT_FOUND)->respondWithError($message);
    }

    /**
     * @param string $message
     * @return mixed
     */
    public function respondInternalError($message = "Internal error!")
    {
        return $this->setStatusCode(IlluminateResponse::HTTP_INTERNAL_SERVER_ERROR)->respondWithError($message);
    }

    /**
     * @param $data
     * @param array $headers
     * @return mixed
     */
    public function respond($data, $headers = [])
    {
        return Response::json($data, $this->getStatusCode(), $headers);
    }

    /**
     * @param $items
     * @param $data
     * @return mixed
     */
    protected function respondWithPagination($items, $data)
    {
        $data = array_merge($data, [
            'paginator' => [
                'total_count' => $items->total()
                , 'total_pages' => ceil($items->total() / $items->perPage())
                , 'current_page' => $items->currentPage()
                , 'limit' => $items->count()
            ]
        ]);

        return $this->respond($data);
    }

    /**
     * @param $message
     * @return mixed
     */
    public function respondWithError($message)
    {
        return $this->respond([
            'error' => [
                'message'           => $message
                , 'status_code'     => $this->getStatusCode()
            ]
        ]);
    }

    /**
     * @param $message
     * @return mixed
     */
    public function respondCreated($message)
    {
        return $this->setStatusCode(IlluminateResponse::HTTP_CREATED)
            ->respond([
                "data" => $message
            ]);
    }

    /**
     * @param $message
     * @return mixed
     */
    public function respondValidationFailed($message)
    {
        return $this->setStatusCode(IlluminateResponse::HTTP_UNPROCESSABLE_ENTITY)
            ->respondWithError($message);
    }
}