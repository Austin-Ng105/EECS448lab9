function gradeQuiz() {
                var grade = 0;
                var test1 = document.querySelector('input[name="Q1"]:checked').value;
                var test2 = document.querySelector('input[name="Q2"]:checked').value;
                var test3 = document.querySelector('input[name="Q3"]:checked').value;
                var test4 = document.querySelector('input[name="Q4"]:checked').value;
                var test5 = document.querySelector('input[name="Q5"]:checked').value;

                document.write("Question 1: What is 2x2: " + "<br>");
                document.write("You answered: " + test1 + "<br>");
                document.write("Correct answer: 4" + "<br>");
                
                document.write("<br>" + "Question 2: What is color is raven: " + "<br>");
                document.write("You answered: " + test2 + "<br>");
                document.write("Correct answer: Black" + "<br>");

                document.write("<br>" +" Question 3: What is capital of Japan: " + "<br>");
                document.write("You answered: " + test3 + "<br>");
                document.write("Correct answer: Tokyo" + "<br>");

                document.write("<br>" + "Question 4: Which animal lay eggs: " + "<br>");
                document.write("<br>" + "You answered: " + test4 + "<br>");
                document.write("Correct answer: Chicken" + "<br>");

                document.write("<br>" + "Question 5: Which element is O " + "<br>");
                document.write("You answered: " + test5 + "<br>");
                document.write("Correct answer: Oxygen" + "<br>");

                if(test1 == '4'){
                    grade += 20;
      
                }
                if(test2 == "black"){
                    grade += 20;

                }
                if(test3 == "tokyo"){
                    grade += 20;

                }
                if(test4 == "chicken"){
                    grade += 20;

                }
                if(test5 == "oxygen"){
                    grade += 20;

                }
                document.write(" <br>"+"Grade: " +grade +"%");