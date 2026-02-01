@props([
    'id',
    'color' => 'success',
    'text' => 'white',
    'time' => '',
    'title' => 'Notification'
])



  <div id={{ $id }}
   class="toast hide"
    role="alert" 
    aria-live="assertive"
     aria-atomic="true" 
     data-delay="3000">
     
    <div class="toast-header bg-{{ $color }} border-0 text-{{ $text }}">
      <i class="fas fa-bell mr-2 text-white"></i>
      <strong class="mr-auto">{{ $title }}</strong>
      <small>{{ $time }}</small>
    </div>
    <div class="toast-body">
     {{ $slot }}
    </div>
  </div>
