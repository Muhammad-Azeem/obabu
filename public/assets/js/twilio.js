const name = document.getElementById('room-name-test').getAttribute('data-name');
const token = document.getElementById('token-access-test').getAttribute('data-token');

Twilio.Video.createLocalTracks({
   audio: true,
   video: { width: 500 },
}).then(function(localTracks) {
   console.log(localTracks);
   return Twilio.Video.connect(token, {
       name: name,
       tracks: localTracks,
       video: { width: 500 }
   });
}).then(function(room) {

   console.log('Successfully joined a Room: ', room.name);

   room.participants.forEach(participantConnected);

   var previewContainer = document.getElementById(room.localParticipant.sid);
   if (!previewContainer || !previewContainer.querySelector('video')) {
       participantConnected(room.localParticipant);
   }

   room.on('participantConnected', function(participant) {
    console.log(`Participant  joining ${participant.identity}`);
       participantConnected(participant);
   });

   room.on('participantDisconnected', function(participant) {
    console.log(`disconnected: ${participant.identity}`);
       participantDisconnected(participant);
   });



 $(document).on('click','.share-screen-test',function(){
   navigator.mediaDevices.getDisplayMedia().then(stream => {
      screenTrack = new Twilio.Video.LocalVideoTrack(stream.getTracks()[0]);
      room.localParticipant.publishTrack(screenTrack);
  }).catch(() => {
      alert('Could not share the screen.')
  });  
 });

 $(document).on('click','.close-screen-test',function(){
   room.localParticipant.unpublishTrack(screenTrack);
   screenTrack.stop();
   screenTrack = null;

 });

});
// additional functions will be added after this point
function participantConnected(participant) {
console.log(`Participant  connected ${participant.identity}`);

const div = document.createElement('div');
div.id = participant.sid;
div.setAttribute("style", "float: left; margin: 10px;");
div.innerHTML = `<div style='clear:both'>${participant.identity }</div>
<button class="bg-primary share-screen-test">Share Screen</button>
<button class="bg-dangerous close-screen-test">Close Screen</button>`;

participant.tracks.forEach(function(track) {
   trackAdded(div, track)
});

participant.on('trackAdded', function(track) {
   trackAdded(div, track)
});
participant.on('trackRemoved', trackRemoved);

document.getElementById('media-div').appendChild(div);
}

function participantDisconnected(participant) {
console.log('Participant "%s" disconnected', participant.identity);

participant.tracks.forEach(trackRemoved);
document.getElementById(participant.sid).remove();
}

function trackAdded(div, track) {
div.appendChild(track.attach());
var video = div.getElementsByTagName("video")[0];
if (video) {
   video.setAttribute("style", "max-width:300px;");
}
}

function trackRemoved(track) {
track.detach().forEach( function(element) { element.remove() });
}