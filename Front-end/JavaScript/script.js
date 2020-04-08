// var userName = prompt("Enter Username: ");

// alert("Nice to meet youu, "+ userName);

// console.log("Also great to meet you, "+ userName);

 // var first = prompt("What's your First Name: ");
 // var second = prompt("What's your Second Name: ");
 // var age = prompt("What's your Age: ");

 // console.log("Your full name is " + first +" "+ second);
 // console.log("You are "+age+" years old");

 // var age = prompt("Enetr your Age: ");

 // alert(age+" years is roughly "+ age*365.25 +" days");

////Conditionals:

// alert("Hi! Welcome to Bar...!");
 
//  var age = Number(prompt("Enter your Age: "));
// var root = Math.sqrt(age);
// //  if (age < 18) {
// //  	alert("You cannot enter the bar.");
// //  }
// //  else if (age >= 18 && age < 21) {
// //  	alert("You can enter but cannot drink ");
// //  }
// //  else {
// //  	alert("You can enter and drink");
// //  }


// if (age < 0 ) {
// 	alert("Error");
// }
// else if (age == 21) {
// 	alert("Happy 21st birthday. Buddy! ");
// }
// else if (age % 2 != 0 && age > 0 && root % 1 !== 0) {
// 	alert("Your age is odd.");
// }
// else if (age % 2 != 0 && age > 0 && root % 1 === 0) {
// 	alert("\"Perfect Square!\" plus Your Age is odd.");
// }
// else if (age % 2 == 0 && age > 0 && root % 1 === 0) {
// 	alert("\"Perfect Square!\" plus Your Age is Even.");
// }
// else if (age % 2 == 0 && age > 0 && root % 1 ! == 0) {
// 	alert("Your Age is Even.");
// }

//// Loops:

//var num = 1;

// while(num <= 20){
// 	if (num % 4 === 0) {
// 		console.log(num);
// 	}
// 	num++;
// }

// while(num <= 10){
// 	console.log(num);
// 	num+=2;
// }

// //infinite loop
// var num = 100;
// while(num < 150){
// 	console.log(num + 1);
// 	num--;
// }


//////Exersise
//1)
 console.log("Printing Numbers between -10 and 19 ")
 var num = -10;
 while(num <= 19) {
 	console.log(num);
 	num++;
 }

//2)
 console.log("Printing all even Numbers between 10 and 40 ")
var num1 = 10;
while(num1 <= 40) {
 	if (num1 % 2 == 0) {
 		console.log(num1);
 	}
	num1++;
} 

//3)
 console.log("Printing all Odd Numbers between 300 and 333 ")
 var count = 300;
 while(count <= 333) {
 	if (count % 2 != 0) {
 		console.log(count);
 	}
 	count++;
 }

 //4)
 console.log("Printing all Numbers divisible by 5 AND 3 between 5 and 50 ");
 var nu = 5;
 while(nu <= 50) {
 	if (nu % 5 == 0 && nu % 3 == 0) {
 		console.log(nu);
 	}
 	nu++;
 }

