<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Validation\ValidationException;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Auth\Access\AuthorizationException;

class ApiExceptionHandler
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Process the request
        $response = $next($request);

        // If this is an API request, handle exceptions specially
        if ($request->wantsJson() || $request->is('api/*')) {
            // Check if the response is an error
            if ($response->getStatusCode() >= 400) {
                // Return a consistent JSON error response
                return response()->json([
                    'success' => false,
                    'message' => $this->getErrorMessage($response->getStatusCode()),
                    'status_code' => $response->getStatusCode()
                ], $response->getStatusCode());
            }
        }

        return $response;
    }

    /**
     * Get a user-friendly error message based on the status code.
     *
     * @param int $statusCode
     * @return string
     */
    private function getErrorMessage(int $statusCode): string
    {
        switch ($statusCode) {
            case 400:
                return 'Bad Request';
            case 401:
                return 'Unauthorized';
            case 403:
                return 'Forbidden';
            case 404:
                return 'Not Found';
            case 405:
                return 'Method Not Allowed';
            case 422:
                return 'Unprocessable Entity';
            case 429:
                return 'Too Many Requests';
            case 500:
                return 'Internal Server Error';
            case 503:
                return 'Service Unavailable';
            default:
                return 'An error occurred';
        }
    }
}