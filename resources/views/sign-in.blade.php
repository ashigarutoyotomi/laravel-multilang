<x-header/>
@isset($msg)
    <div class="alert alert-warning" role="alert">
      <h4 class="alert-heading">incorrect login data</h4>
      <p>{{ $msg }}</p>
      <hr>
    </div>
@endisset

<form action="login" method="get">
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">@lang('main.email')</label>
      <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">@lang('main.password')</label>
      <input type="password" class="form-control" id="exampleInputPassword1" required name="password">
    </div>
    <button type="submit" class="btn btn-primary">@lang('main.send')</button>
  </form>
<x-footer/>
