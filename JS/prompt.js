let answer = prompt("There is a slightly broken bridge right in front of you.\n Type cross to cross it, type continue to keep walking along the path, type stop to stop walking.");


if (answer == "cross") {
    let answer1 = prompt("You decided to cross the bridge but unfortunatly the bridge breaks whilst you walk across it. You fall into the ravine you where crossing but you have a parachute.\n Type open to open the parachute, type not open to not open it.");
    if (answer1 == "open") {
        let answer2 = prompt("You opened your parachute just in time and land safely at the bottom of the ravine near the road, a hot woman drives by in a whit van and askes if you need a lift.\n Type steal to steal the car, type get in to get into the car with the woman, type continue to continue walking.");
        if (answer2 == "steal") {
            let answer3 = prompt("You stole the vehicle and find out you can't drive because you forgot your leg when you went for the walk so you crash the car and die a horrible death. refresh the page to restart.");
        }
        else if (answer2 == "continue") {
            let answer3 = prompt("You did not get into the van with the woman and instantly an entire armenian gang gets out of the back of the van to beg you to get in.\n Type get in to get into the van, type continue to continue walking.");
            if (answer3 == "get in") {
                let answer3 = prompt("You got in the back of the van of the woman with the armenian gang and they rape you to death.\n Refresh the page to restart.");
            }
            else if (answer3 == "continue") {
                prompt("congrats you walk another couple miles and see your home in the distance and get back in.\n You bassicaly won so if you want to retry to see what could've happend refresh the page.");
            }
            else {
                prompt("You wrote something wrong and you have to refresh the page to try again.");
            }
        }
        else if (answer2 == "get in") {
            let answer3 = prompt("You got in the back of the van of the woman but find out immediately that there is an armenian gang in the back of the van who rapes you to death.\n Refresh the page to restart.");
        }
        else {
            prompt("You wrote something wrong and you have to refresh the page to try again.");
        }
    }
    else if (answer1 == "not open"){
        let answer2 = prompt("You did not open your parachute so you fall to death.\n Refresh the page to restart");
    }
    else {
        prompt("You wrote something wrong and you have to refresh the page to try again.");
    }
}
else if (answer == "continue") {
    let answer1 = prompt("You chose to continue walking the same path into the woods and get stabbed by seven morrocan hitmans.\n Refresh the page to restart.");
}
else if (answer == "stop") {
    let answer1 = prompt("You stop walking for the night and a very hot somewhat human looking shrek walks towards you and quotes the entire Shrek1 movie script.\n Type listen to continue listening, type commit to commit suicide do to the boredom you got whilst listing.");

    if (answer1 == "listen") {
    let answer2 = prompt("Copy this link and paste it into your browser.\n http://www.script-o-rama.com/movie_scripts/s/shrek-script-transcript-mike-myers.html");
}
    else if (answer1 == "commit") {
    let answer2 = prompt("you succesfully commited suicide and shrek fucks your corpse.\n Refresh the page to restart.");
}
    else {
    prompt("You wrote something wrong and you have to refresh the page to try again.");
}
}
else {
    prompt("You wrote something wrong and you have to refresh the page to try again.");
}