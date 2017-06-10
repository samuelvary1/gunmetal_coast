  <style>

    .module {
      margin: 20px auto;
    }

    .top-bar {
      background: #666;
      color: white;
      padding: 0.5rem;
      position: relative;
      overflow: hidden;
      h1 {
        display: inline;
        font-size: 1.1rem;
      }
      .typicons-message {
        display: inline-block;
        padding: 4px 5px 2px 5px;
      }
      .typicons-minus {
        position: relative;
        top: 3px;
      }
      .left {
        float: left;
      }
      .right {
        float: right;
        padding-top: 5px;
      }
      > * {
        position: relative; 
      }
      &::before {
        content: "";
        position: absolute;
        top: -100%;
        left: 0;
        right: 0;
        bottom: -100%;
        opacity: 0.25;
        background: radial-gradient(white, black);
        animation: pulse 1s ease alternate infinite;
      }
    }

    .discussion {
      list-style: none;
      background: #e5e5e5;
      margin: 0;
      padding: 0 0 50px 0; // finality
      li {
        padding: 0.5rem;
        overflow: hidden;
        display: flex;
      }
      .avatar {
        width: 40px; // stronger than %
        // could set height, but gonna bottom-align instead
        position: relative; // for triangle
        img {
          display: block; // triangle position
          width: 100%;
        }
      }
    }

    .other {
      .avatar {
        &:after {
          content: "";
          position: absolute;
          top: 0;
          right: 0;
          width: 0;
          height: 0;
          border: 5px solid white;
          border-left-color: transparent;
          border-bottom-color: transparent;
        }
      }
    }

    .self {
      justify-content: flex-end;
      align-items: flex-end;
      .messages {
        order: 1;
        border-bottom-right-radius: 0; // weird shadow fix
      }
      .avatar {
        order: 2;
        &:after {
          content: "";
          position: absolute;
          bottom: 0;
          left: 0;
          width: 0;
          height: 0;
          border: 5px solid white;
          border-right-color: transparent;
          border-top-color: transparent;
          box-shadow: 1px 1px 2px rgba(black, 0.2); // not quite perfect but close
        }
      }
    }

    .messages {
      background: white;
      padding: 10px;
      border-radius: 2px;
      box-shadow: 0 1px 2px rgba(black, 0.2);
      p {
        font-size: 0.8rem;
        margin: 0 0 0.2rem 0;
      }
      time {
        font-size: 0.7rem;
        color: #ccc;
      }
    }

    @keyframes pulse {
      from { opacity: 0; }
      to { opacity: 0.5; }
    }
</style>

<div class="container" style="height:250px; overflow:auto; border:4px solid">
  <section class="module">
  
  <header class="top-bar">
    <div class="left">
      <span class="icon typicons-message"></span>
      <h1>Chapter 1</h1>
    </div>
  </header>
  
  <ol class="discussion">
    <li class="other">
      <div class="messages">
        <p>yeah, they do early flights cause they connect with big airports.  they wanna get u to your connection</p>
        <time datetime="2009-11-13T20:00">Timothy • 51 min</time>
      </div>
    </li>
    <li class="self">
      <div class="messages">
        <p>That makes sense.</p>
        <p>It's a pretty small airport.</p>
        <time datetime="2009-11-13T20:14">37 mins</time>
      </div>
    </li>
    <li class="other">
      <div class="messages">
        <p>that mongodb thing looks good, huh?</p>
        <p>
          tiny master db, and huge document store</p>
      </div>
    </li>
  </ol>

</div><br>
<div class="container">
  <form action="/action_page.php">
    <p style="font-weight: bold">Enter Command: </p><input type="text" name="command">
  <input type="submit" value="Submit" class="btn-primary">
</div>