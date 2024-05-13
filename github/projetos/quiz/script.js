 const question=document.querySelector(".question");
 const aswers=document.querySelector(".aswers");
 const spnqtd=document.querySelector("spnqyd");
 const textfinish=document.querySelector(".finish span");
 const content=document.querySelector(".content");
 const contentfinish=document.querySelector(".finish button");
 const btnRestart=document.querySelector(".finish button");

 import questions from "./questions";

 let currentindex=0;
 let questionscorrect=0;

function loadquestion(){ 
    spnqtd.innerHTML='${currentindex+1}/$quation.length}`;
    const item=question[currentindex];
    aswers.innerHTML="";
    question.innerHTML=item.question;
}
item.aswers.array.forEach(aswers => {
    const div=document.createElement("div");
    
    div.innerHTML=`
    <button class="data-correct"$aswer.correct}">
    ${answer.option}
    </button>
    ´;

    aswers.appendchild(div);
});
    } document.queryselectorall
});
 loadquestion();



 