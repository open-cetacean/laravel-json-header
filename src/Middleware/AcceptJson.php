<?php
namespace OpenCetacean\JsonHeader\Middleware;
use Closure;
class AcceptJson
{
  /**
   * Change the Request headers to "application/json" activating wantsJson()
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \Closure  $next
   *
   * @return mixed
   */
  public function handle($request, Closure $next)
  {
      $request->headers->set('Accept', 'application/json');

      return $next($request);
  }
}
