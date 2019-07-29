var quiz = [];
quiz[0]=new Question("Which is this あ?", "a", "ka", "mo", "n");
quiz[1]=new Question("Which is this い?", "i", "mo", "ki", "ya");
quiz[2]=new Question("Which is this う?", "u", "mi", "mu", "ki");
quiz[3]=new Question("Which is this え?", "e", "wo", "ke", "yo");			
quiz[4]=new Question("Which is this お?", "o", "ha", "yu", "ko");		
quiz[5]=new Question("Which is this か?", "ka", "u", "ke", "re");
quiz[6]=new Question("Which is this き?", "ki", "ru", "ya", "mu");
quiz[7]=new Question("Which is this く?", "ku", "mu", "ra", "ni");
quiz[8]=new Question("Which is this け?", "ke", "ri", "ho", "su");
quiz[9]=new Question("Which is this こ?", "ko", "ro", "ni", "a");
quiz[10]=new Question("Which is this さ?", "sa", "si", "no", "ta");			
quiz[11]=new Question("Which is this し?", "si", "ne", "u", "ke");			
quiz[12]=new Question("Which is this す?", "su", "sa", "to", "me");			
quiz[13]=new Question("Which is this せ?", "se", "mi", "o", "ki");			
quiz[14]=new Question("Which is this そ?", "so", "ne", "ti", "ro");
quiz[15]=new Question("Which is this た?", "ta", "to", "mo", "te");		
quiz[16]=new Question("Which is this ち?", "ti", "mi", "ri", "u");
quiz[17]=new Question("Which is this つ?", "tu", "ma", "yo", "n");			
quiz[18]=new Question("Which is this て?", "te", "mi", "a", "ro");			
quiz[19]=new Question("Which is this と?", "to", "o", "yu", "ni");
quiz[20]=new Question("Which is this な?", "na", "me", "ta", "no");
quiz[21]=new Question("Which is this に?", "ni", "nu", "ru", "mo");			
quiz[22]=new Question("Which is this ぬ?", "nu", "me", "yu", "n");			
quiz[23]=new Question("Which is this ね?", "ne", "mi", "o", "me");			
quiz[24]=new Question("Which is this の?", "no", "me", "a", "ri");			
quiz[25]=new Question("Which is this は?", "ha", "hu", "ri", "mi");			
quiz[26]=new Question("Which is this ひ?", "hi", "mu", "ha", "mi");			
quiz[27]=new Question("Which is this ふ?", "hu", "ma", "hi", "ne");			
quiz[28]=new Question("Which is this へ?", "he", "ro", "nu", "ni");			
quiz[29]=new Question("Which is this ほ?", "ho", "ri", "i", "ko");			
quiz[30]=new Question("Which is this ま?", "ma", "yu", "o", "ni");			
quiz[31]=new Question("Which is this み?", "mi", "hu", "ni", "sa");			
quiz[32]=new Question("Which is this む?", "mu", "re", "si", "mo");			
quiz[33]=new Question("Which is this め?", "me", "ni", "ru", "a");	
quiz[34]=new Question("Which is this も?", "mo", "ra", "si", "no");			
quiz[35]=new Question("Which is this や?", "ya", "yo", "mi", "re");
quiz[36]=new Question("Which is this ゆ?", "yu", "me", "ru", "na");	
quiz[37]=new Question("Which is this よ?", "yo", "ri", "i", "me");			
quiz[38]=new Question("Which is this ら?", "ra", "yu", "ri", "n");			
quiz[39]=new Question("Which is this り?", "ri", "u", "no", "yo");			
quiz[40]=new Question("Which is this る?", "ru", "si", "ma", "ni");			
quiz[41]=new Question("Which is this れ?", "re", "yo", "i", "ni");	
quiz[42]=new Question("Which is this ろ?", "ro", "ra", "mi", "nu");
quiz[43]=new Question("Which is this わ?", "wa", "wo", "no", "yu");			
quiz[44]=new Question("Which is this を?", "wo", "ni", "re", "sa");			
quiz[45]=new Question("Which is this ん?", "n", "i", "ha", "ru");

var randomQuestion;
var answers=[];
var currentScore=0;
var currentQuestion=0;

document.addEventListener("DOMContentLoaded", function(event) { 
  btnProvideQuestion();
});

function Question(question,rightAnswer,wrongAnswer1,wrongAnswer2,wrongAnswer3) 
{
    this.question = question;
    this.rightAnswer = rightAnswer;
    this.wrongAnswer1 = wrongAnswer1;
    this.wrongAnswer2 = wrongAnswer2;
	this.wrongAnswer3 = wrongAnswer3;
};

function shuffle(o) 
{
	for(var j, x, i = o.length; i; j = parseInt(Math.random() * i), x = o[--i], o[i] = o[j], o[j] = x);
	return o;
};

function btnProvideQuestion() 
{  
	if(currentQuestion<10)
	{
		var randomNumber = Math.floor(Math.random()*quiz.length);
		randomQuestion = quiz[randomNumber]; //getQuestion
		answers = [randomQuestion.rightAnswer, randomQuestion.wrongAnswer1, randomQuestion.wrongAnswer2, randomQuestion.wrongAnswer3];
		shuffle(answers);
	
		document.getElementById("question").innerHTML= randomQuestion.question;
		document.getElementById("answerA").value= answers[0];
		document.getElementById("answerA").innerHTML= answers[0];
		document.getElementById("answerB").value= answers[1];
		document.getElementById("answerB").innerHTML= answers[1];
		document.getElementById("answerC").value= answers[2];
		document.getElementById("answerC").innerHTML= answers[2];
		document.getElementById("answerD").value= answers[3];
		document.getElementById("answerD").innerHTML= answers[3];
	}
	else 
	{
		adjustScore();
		alert("You got "+currentScore+" questions right. "+currentScore+"0%\nThe quiz will be reset");
		currentScore=0;
		currentQuestion=0;
	}
}

function answerA_clicked() 
{
	var answerA = document.getElementById("answerA").value;
  	checkAnswer(answerA);
}

function answerB_clicked() 
{
	var answerB = document.getElementById("answerB").value;
	checkAnswer(answerB);
}

function answerC_clicked() 
{
	var answerC = document.getElementById("answerC").value;	
	checkAnswer(answerC);
}

function answerD_clicked() 
{
	var answerD = document.getElementById("answerD").value;
	checkAnswer(answerD);
}

function adjustScore(isCorrect) 
{
	debugger;
	if (isCorrect) 
	{
		currentScore++;
	}
	document.getElementById("score").innerHTML = currentScore;
}

function checkAnswer(answer) 
{
	if (answer == randomQuestion.rightAnswer) 
	{
		adjustScore(true);
		btnProvideQuestion();
		currentQuestion++;
	} 
	else
	{ 
		adjustScore(false);
		btnProvideQuestion();
		currentQuestion++;
	}
}

//Romaji quiz
var quiz1 = [];
quiz1[0]=new Question1("Which romaji is this a?", "あ", "か", "も", "ん");
quiz1[1]=new Question1("Which romaji is this i?", "い", "も", "き", "や");
quiz1[2]=new Question1("Which romaji is this u?", "う", "み", "む", "き");
quiz1[3]=new Question1("Which romaji is this e?", "え", "を", "け", "よ");			
quiz1[4]=new Question1("Which romaji is this o?", "お", "は", "ゆ", "こ");		
quiz1[5]=new Question1("Which romaji is this ka?", "か", "う", "け", "れ");
quiz1[6]=new Question1("Which romaji is this ki?", "き", "る", "や", "む");
quiz1[7]=new Question1("Which romaji is this ku?", "く", "む", "ら", "に");
quiz1[8]=new Question1("Which romaji is this ke?", "け", "り", "ほ", "す");
quiz1[9]=new Question1("Which romaji is this ko?", "こ", "ろ", "に", "あ");
quiz1[10]=new Question1("Which romaji is this sa?", "さ", "し", "の", "た");			
quiz1[11]=new Question1("Which romaji is this si?", "し", "ね", "う", "け");			
quiz1[12]=new Question1("Which romaji is this su?", "す", "さ", "と", "め");			
quiz1[13]=new Question1("Which romaji is this se?", "せ", "み", "お", "き");			
quiz1[14]=new Question1("Which romaji is this so?", "そ", "ね", "ち", "ろ");
quiz1[15]=new Question1("Which romaji is this ta?", "た", "と", "も", "て");		
quiz1[16]=new Question1("Which romaji is this ti?", "ち", "み", "り", "う");
quiz1[17]=new Question1("Which romaji is this tu?", "つ", "ま", "よ", "ん");			
quiz1[18]=new Question1("Which romaji is this te?", "て", "み", "あ", "ろ");			
quiz1[19]=new Question1("Which romaji is this to?", "と", "お", "ゆ", "に");
quiz1[20]=new Question1("Which romaji is this na?", "な", "め", "た", "の");
quiz1[21]=new Question1("Which romaji is this ni?", "に", "ぬ", "る", "も");			
quiz1[22]=new Question1("Which romaji is this nu?", "ぬ", "め", "ゆ", "ん");			
quiz1[23]=new Question1("Which romaji is this ne?", "ね", "み", "お", "め");			
quiz1[24]=new Question1("Which romaji is this no?", "の", "め", "あ", "り");			
quiz1[25]=new Question1("Which romaji is this ha?", "は", "ふ", "り", "み");			
quiz1[26]=new Question1("Which romaji is this hi?", "ひ", "む", "は", "み");			
quiz1[27]=new Question1("Which romaji is this hu?", "ふ", "ま", "ひ", "ね");			
quiz1[28]=new Question1("Which romaji is this he?", "へ", "ろ", "ぬ", "に");			
quiz1[29]=new Question1("Which romaji is this ho?", "ほ", "り", "い", "こ");			
quiz1[30]=new Question1("Which romaji is this ma?", "ま", "ゆ", "お", "に");			
quiz1[31]=new Question1("Which romaji is this mi?", "み", "ふ", "に", "さ");			
quiz1[32]=new Question1("Which romaji is this mu?", "む", "れ", "し", "も");			
quiz1[33]=new Question1("Which romaji is this me?", "め", "に", "る", "あ");	
quiz1[34]=new Question1("Which romaji is this mo?", "も", "ら", "し", "の");			
quiz1[35]=new Question1("Which romaji is this ya?", "や", "よ", "み", "れ");
quiz1[36]=new Question1("Which romaji is this yu?", "ゆ", "め", "る", "な");	
quiz1[37]=new Question1("Which romaji is this yo?", "よ", "り", "い", "め");			
quiz1[38]=new Question1("Which romaji is this ra?", "ら", "ゆ", "り", "ん");			
quiz1[39]=new Question1("Which romaji is this ri?", "り", "う", "の", "よ");			
quiz1[40]=new Question1("Which romaji is this ru?", "る", "し", "ま", "に");			
quiz1[41]=new Question1("Which romaji is this re?", "れ", "よ", "い", "に");	
quiz1[42]=new Question1("Which romaji is this ro?", "ろ", "ら", "み", "ぬ");
quiz1[43]=new Question1("Which romaji is this wa?", "わ", "を", "の", "ゆ");			
quiz1[44]=new Question1("Which romaji is this wo?", "を", "に", "れ", "さ");			
quiz1[45]=new Question1("Which romaji is this n?", "ん", "い", "は", "る");

var randomQuestion1;
var answers1=[];
var currentScore1=0;
var currentQuestion1=0;

document.addEventListener("DOMContentLoaded", function(event) { 
  btnProvideQuestion1();
});

function Question1(question1,rightAnswer1,wrongAnswer11,wrongAnswer21,wrongAnswer31) 
{
    this.question1 = question1;
    this.rightAnswer1 = rightAnswer1;
    this.wrongAnswer11 = wrongAnswer11;
    this.wrongAnswer21 = wrongAnswer21;
	this.wrongAnswer31 = wrongAnswer31;
};

function shuffle1(o) 
{
	for(var j, x, i = o.length; i; j = parseInt(Math.random() * i), x = o[--i], o[i] = o[j], o[j] = x);
	return o;
};

function btnProvideQuestion1() 
{  
	if(currentQuestion1<10)
	{
		var randomNumber1 = Math.floor(Math.random()*quiz1.length);
		randomQuestion1 = quiz1[randomNumber1]; //getQuestion
		answers1 = [randomQuestion1.rightAnswer1, randomQuestion1.wrongAnswer11, randomQuestion1.wrongAnswer21, randomQuestion1.wrongAnswer31];
		shuffle1(answers1);
	
		document.getElementById("question1").innerHTML= randomQuestion1.question1;
		document.getElementById("answerA1").value= answers1[0];
		document.getElementById("answerA1").innerHTML= answers1[0];
		document.getElementById("answerB1").value= answers1[1];
		document.getElementById("answerB1").innerHTML= answers1[1];
		document.getElementById("answerC1").value= answers1[2];
		document.getElementById("answerC1").innerHTML= answers1[2];
		document.getElementById("answerD1").value= answers1[3];
		document.getElementById("answerD1").innerHTML= answers1[3];
	}
	else 
	{
		adjustScore1();
		alert("You got "+currentScore1+" questions right. "+currentScore1+"0%\nThe quiz will be reset");
		currentScore1=0;
		currentQuestion1=0;
	}
}

function answerA_clicked1() 
{
	var answerA1 = document.getElementById("answerA1").value;
  	checkAnswer1(answerA1);
}

function answerB_clicked1() 
{
	var answerB1 = document.getElementById("answerB1").value;
	checkAnswer1(answerB1);
}

function answerC_clicked1() 
{
	var answerC1 = document.getElementById("answerC1").value;	
	checkAnswer1(answerC1);
}

function answerD_clicked1() 
{
	var answerD1 = document.getElementById("answerD1").value;
	checkAnswer1(answerD1);
}

function adjustScore1(isCorrect) 
{
	debugger;
	if (isCorrect) 
	{
		currentScore1++;
	}
	document.getElementById("score1").innerHTML = currentScore1;
}

function checkAnswer1(answer1) 
{
	if (answer1 == randomQuestion1.rightAnswer1) 
	{
		adjustScore1(true);
		btnProvideQuestion1();
		currentQuestion1++;
	} 
	else
	{ 
		adjustScore1(false);
		btnProvideQuestion1();
		currentQuestion1++;
	}
}