<!DOCTYPE html>
<html lang="en">
<head>
  <title>Gunmetal Coast</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
</head>
<body>

<div class="container">
	<p><i>The cowboy’s only safe place is in his mind.</i></p>

	<p>The gunslinger looked out over the prairie beyond the front railing of the saloon. The breeze that sent a few tumbleweeds to rustle drily along felt like the breath of the devil himself. From inside came the sounds of revelry, glasses clinking and bursts of female laughter. Wouldn’t be but a few moments now before the sun began dipping its way below the horizon, and the plains beyond the edge of town, and the cliffs overlooking the ocean just beyond that, would be awash in blood-red light.</p> 

	<p>The men who had promised to kill him would be here soon. That much was certain. At best he would have a few days to prepare, to learn what we could about this town, to gather items that might help him in his quest to stay alive. Oh, they'd be along shortly, there was no doubt about that. A woman emerged from the milieu behind him to slip a hand around his waist, inquiring if he might like some company for the evening.</p>

	<p>Welcome to Gunmetal Coast, he thought.</p>


  
</section>
</form>
</div>

</body>
</html>