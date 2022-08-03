@extends('layouts.core')

@section('sidebar_width', 'col-md-4')
@section("title", "Music - corbin.world")


@section('content')
<script src="https://tonejs.github.io/examples/js/tonejs-ui.js
" defer></script>
<div class="col-md-8">
    <section id="later" style="margin-top: 25px;"><hr>

<p class="title">
Music with Tone.js
</p>
<hr class="end">

<h1>
This is where I'll start posting music I am expirementing with.
</h1>
<tone-example>
            <tone-explanation label="Step Sequencer">
                  <a href="https://tonejs.github.io/docs/Transport">Tone.Transport</a> 
                  is the application-wide timekeeper. It's clock source enables sample-accurate scheduling as well as tempo-curves and automation. This example uses Tone.Sequence to invoke a callback every 16th note.
            </tone-explanation>

            <tone-content>
                  <tone-transport></tone-transport>
                  <tone-step-sequencer></tone-step-sequencer>
            </tone-content>
      </tone-example>


      <script type="text/javascript">
            $(document).ready(function() {
            //setup a polyphonic sampler
            var keys = new Tone.Players({
                  "A" : "./audio/casio/A1.[mp3|ogg]",
                  "C#" : "./audio/casio/Cs2.[mp3|ogg]",
                  "E" : "./audio/casio/E2.[mp3|ogg]",
                  "F#" : "./audio/casio/Fs2.[mp3|ogg]",
            }, {
                  "volume" : -10,
                  "fadeOut" : "64n",
            }).toMaster();

            //the notes
            var noteNames = ["F#", "E", "C#", "A"];

            var loop = new Tone.Sequence(function(time, col){
                  var column = document.querySelector("tone-step-sequencer").currentColumn;
                  column.forEach(function(val, i){
                        if (val){
                              //slightly randomized velocities
                              var vel = Math.random() * 0.5 + 0.5;
                              keys.get(noteNames[i]).start(time, 0, "32n", 0, vel);
                        }
                  });
                  //set the columne on the correct draw frame
                  Tone.Draw.schedule(function(){
                        document.querySelector("tone-step-sequencer").setAttribute("highlight", col);
                  }, time);
            }, [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15], "16n").start(0);

            //bind the interface
            document.querySelector("tone-transport").bind(Tone.Transport);

            Tone.Transport.on("stop", () => {
                  setTimeout(() => {
                        document.querySelector("tone-step-sequencer").setAttribute("highlight", "-1");
                  }, 100);
            });
});
      </script>
<hr class="end">
<p class="skip">&nbsp;</p> 

	  
      <h5>1</h5>
<p></p>

<hr class="section">

<script type="text/javascript">
$(document).ready(function() {
      //create a synth and connect it to the master output (your speakers)
      var synth = new Tone.Synth().toMaster();

      //play a note every quarter-note
      var loop = new Tone.Loop(function(time){
            synth.triggerAttackRelease("C2", "8n", time);
      }, "4n");

      //loop between the first and fourth measures of the Transport's timeline
      loop.start("1m").stop("4m");

      Tone.Transport.start();
});
</script>


    </section>




</div> <!-- end col-md-8 -->


@endsection