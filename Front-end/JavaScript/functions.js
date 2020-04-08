// function declaration Vs function Expression


// [* ] - Above all are function declarationns


//without argument

function printHi() {
	console.log("Hello...!");
}

//with argument
function square(num) {
	console.log(num * num);
}

//with return keyword
  
function square1(num1) {
	return num1 * num1
}

function capitalize(str) {
	return str.charAt(0).toUpperCase() + str.slice(1);
}

// [* ] - Below is the function Expression

var capitalize = function(str) {
	return str.charAt(0).toUpperCase() + str.slice(1);
}

printHi();
square(3);
square("hi");
console.log(square1(12));

var city = "paris";
var capital = capitalize(city);

console.log(city);
console.log(capital);

capitalize(city);
console.log(capitalize = "Hello"); // a function value is update to "Hello" and captilize is no more function now
capitalize // return "Hello"
console.log(capitalize = "BYE"); 
// capitalize(city); // error as captilize is no more a function but a variable.

//************************************************************//

//Problem Set

function isEven(num) {
	if (num%2 == 0) {
		return true;
	}
	return false;
}

console.log(isEven(12)); 
console.log(isEven(9)); 

// Higher Order Functions

function sing() {
	console.log("Twinkle twinkle ... little Star");
	console.log("How I wonder....what you are");
}

// setInterval(sing, 1000);

// setInterval(function(){
// 	console.log("I am an anonymous function!")
// 	console.log("This is awesome!")
// },8000); 

