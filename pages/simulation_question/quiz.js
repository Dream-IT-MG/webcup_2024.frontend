
let responses = [
    "J'attaque aussi",
    "Je me cache",
    "J'appelle à l'aide",
    "Je fuis",
    "Je prends des photos pour les réseaux sociaux",
    "Je demande un autographe à King Kong",
    "Je demande à Godzilla de me prendre en photo",
    "Je danse devant King Kong pour le distraire",
    "Je cherche un abri sous un toit solide",
    "Je crie et je panique",
    "Je tente de négocier avec les monstres",
    "Je prie pour un miracle",
    "Je lance des pétards pour les effrayer",
]

let questionsReponse = [
    {
        q: "King Kong est en train de détruire un immeuble dans votre quartier, que faites-vous ?",
        r: 
            responses[1], // Je me cache
    },
    {
        q: "Vous êtes pris au piège dans une rue étroite et King Kong bloque votre chemin, quelle est votre réaction ?",
        r: 
            responses[1], // Je me cache
    },
    {
        q: "Godzilla détruit le pont que vous devez traverser pour rejoindre votre famille, que faites-vous ?",
        r: 
            responses[3], // Je fuis
    },
    {
        q: "Vous vous trouvez face à face avec King Kong, que choisissez-vous de faire ?",
        r: 
            responses[3], // Je fuis
    },
    {
        q: "Godzilla se dirige vers votre ville, comment réagissez-vous ?",
        r: 
            responses[0], // J'attaque aussi
    }
];

function getRandomQuestion(questions) {
    // Générer un indice aléatoire pour sélectionner une question
    const randomIndex = Math.floor(Math.random() * questions.length);
    // Renvoyer la question sélectionnée
    return questions[randomIndex];
}

function getRandomResponsesForQCM(question) {
    // Find the matching response for the given question
    const matchingResponseIndex = questionsReponse.findIndex(qcm => qcm.q === question);
    const matchingResponse = matchingResponseIndex !== -1 ? questionsReponse[matchingResponseIndex].r : null;
  
    // Create an array of 4 random responses, including the matching response if it exists
    const randomResponses = [];
    for (let i = 0; i < 3; i++) {
      let randomResponseIndex = Math.floor(Math.random() * responses.length);
      while (randomResponseIndex === matchingResponseIndex && randomResponses.length < responses.length) {
        randomResponseIndex = Math.floor(Math.random() * responses.length);
      }
      randomResponses.push(responses[randomResponseIndex]);
    }
  
    // Shuffle the random responses to ensure randomness
    for (let i = randomResponses.length - 1; i > 0; i--) {
      const j = Math.floor(Math.random() * (i + 1));
      [randomResponses[i], randomResponses[j]] = [randomResponses[j], randomResponses[i]];
    }
  
    // Add the matching response to the shuffled array if it wasn't already included
    if (matchingResponse && !randomResponses.includes(matchingResponse)) {
      randomResponses.push(matchingResponse);
    }
  
    return randomResponses;
}


// setting up questions and random responses
let question = document.querySelector("[data-question]");
let result = document.querySelector("[data-result]");
let responsesElem = document.querySelector("[data-responses]");


let init = () => {
    result.innerHTML = "";
    responsesElem.innerHTML = "";
    // setup next question here
    let randQuest = getRandomQuestion(questionsReponse);
    let randResp = getRandomResponsesForQCM(randQuest.q);
    console.log("randResp");
    console.log(randResp);
    question.innerHTML = randQuest.q;
    for (res in randResp) {
        let elem = document.createElement('li');
        elem
        elem.innerHTML = randResp[res];
        elem.className = "tw-bg-white tw-text-black tw-text-xl tw-flex tw-align-center tw-justify-center tw-p-5 tw-rounded-xl tw-m-5"
        elem.addEventListener("click", e => {
            if (testResponse(0, e.target.innerHTML)) {
                e.target.style.backgroundColor = "#8add43";
                e.target.style.border = "none";
                confetti()
            } else {
                e.target.style.backgroundColor = "#ff684d";
                e.target.style.border = "none";

            };
            setTimeout(() => {
                e.target.style.backgroundColor = "white";
                init();
            }, 2000);
        })
        responsesElem.appendChild(elem);
    }
}
let testResponse = (questionId, response) => {
    return questionsReponse[questionId].r == response;
}

init();