@if(session()->has('message'))
<div x-data="{show: true}" x-init="setTimeout(() => show = false, 3000)" x-show="show"
  class="position-fixed  text-center fw-bold rounded top-0 bg-info text-dark px-5 py-3">
  <p >
    {{session('message')}}
  </p>
</div>
@endif