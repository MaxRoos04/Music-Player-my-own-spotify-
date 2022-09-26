var player = document.getElementById('player'); 

// functions for skip and previous buttons

  var plus = 0;  
  function music_changer(){
    player = document.getElementById('player'); 
    image = document.getElementById('image');
    song = document.getElementById('song');
    plus++; 
    player.src = "audio/" + plus + ".mp3"; 
    image.src = "img/" + plus + ".png"; 
    song.src = "song/" + plus + ".png"; 
    player.load();
    player.play(); 
  }
  function music_backer(){
    player = document.getElementById('player'); 
    image = document.getElementById('image');
    song = document.getElementById('song');
    plus--; 
    player.src = "Audio/" + plus + ".mp3"; 
    image.src = "img/" + plus + ".png"; 
    song.src = "song/" + plus + ".png"; 
    player.load(); 
  }


// Player buttons 

var activeSong;

function play(){
  activeSong = document.getElementById("player");
  activeSong.play();
}

function pause(){
  activeSong.pause();
}

function playPause(){
  activeSong = document.getElementById("player");
  if (activeSong.paused){
    activeSong.play();
  }else{
    activeSong.pause();
  }
}

//Volume slider 

let volume = document.getElementById('volume-slider');
volume.addEventListener("change", function(e) {
player.volume = e.currentTarget.value / 100;
})

//search 

const people = [
  { name: 'dj khaled 1 in the player'},
  { name: 'joey badass 2 in the player'},
  { name: 'martin garrix 3 in the player'},
  { name: 'meduza 4 in the player'},
]

const searchInput = document.querySelector('input')

searchInput.addEventListener("input", (e) => {

  let value = e.target.value

  if (value && value.trim().length > 0){
       value = value.trim().toLowerCase()

      setList(people.filter(person => {
        return person.name.includes(value)
      }))
  } else {

      clearList()

  }
}) 


function setList(results){

  clearList()
  for (const person of results){
      const resultItem = document.createElement('li')
      resultItem.classList.add('result-item')
      const text = document.createTextNode(person.name)
      resultItem.appendChild(text)
      list.appendChild(resultItem)
  }

  if (results.length === 0 ){
      noResults()
  }
}

function clearList(){
  while (list.firstChild){
      list.removeChild(list.firstChild)
  }
}

function noResults(){
  const error = document.createElement('li')
  error.classList.add('error-message')

  const text = document.createTextNode('No results found. Sorry!')
  error.appendChild(text)
  list.appendChild(error)
}


//time slider 

setInterval(updateSongProgress, 100);

async function updateSongProgress()
    {
        var songMaxLength = document.getElementById('player').duration;
        document.getElementById('progressSlider').max = songMaxLength;

        var songProgress = player.currentTime;
        var songTimeIndicator = document.getElementById("timeIndicator");
        var progressMinutes = Math.floor(songProgress / 60);
        var progressSeconds = Math.floor(songProgress % 60);
        var timeMinutes = Math.floor(player.duration / 60);
        var timeSeconds = Math.floor(player.duration % 60);
        if (progressSeconds < 10)
        {
            progressSeconds = "0" + progressSeconds;
        }
        if (timeSeconds < 10)
        {
            timeSeconds = "0" + timeSeconds;
        }
        songTimeIndicator.innerHTML = progressMinutes + ":" + progressSeconds + " / " + timeMinutes + ":" + timeSeconds;

        document.getElementById('progressSlider').value = songProgress;
    }



