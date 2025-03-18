// Alert wala batta
alert("This is an alert!");

// Confirm wala batta
let confirmation = confirm("Do you want to proceed?");
if (confirmation) {
    alert("You clicked OK!");
} else {
    alert("You clicked Cancel.");
}

// Prompt wala batta
let userInput = prompt("What is your favorite color?");
if (userInput !== null) {
    alert("Your favorite color is " + userInput);
} else {
    alert("You didn't provide any input.");
}
