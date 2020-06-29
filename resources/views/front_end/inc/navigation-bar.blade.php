@yield('navigation-bar')

<div class="nav">
  <ul>
    <li>
      <a class="logo" href="http://andytran.me">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/169963/logo_(1).svg">
      </a>
    </li>
    <li>
      <a href="#portfolio">Portfolio</a>
    </li>
    <li>
      <a href="#calendar">
        Calendar
        <i class="fa fa-caret-down"></i>
      </a>
      <ul class="menu">
        <li>
          <a href="#event_one">Event #1</a>
        </li>
        <li>
          <a href="#event_two">Event #2</a>
        </li>
        <li>
          <a href="#event_three">Event #3</a>
        </li>
      </ul>
    </li>
    <li>
      <a href="#resume">Resume</a>
    </li>
    <li>
      <a href="#blog">Blog</a>
    </li>
    <li>
      <a href="#contact">
        <div class="fa fa-envelope"></div>
      </a>
    </li>
  </ul>
</div>