const submitBtn = document.getElementById("submitBtn");

submitBtn.addEventListener("click", function(event) {

  event.preventDefault();


  const name = document.getElementById("name").value;
  const email = document.getElementById("email").value;
  const feedback = document.getElementById("feedback").value;
  const rating = document.getElementById("rating").value;


  if (name === "" || email === "" || feedback === "" || rating === "") {
    alert("Please fill out all required fields.");
    return;
  }

 
  console.log("Name:", name);
  console.log("Email:", email);
  console.log("Feedback:", feedback);
  console.log("Rating:", rating);
}
