function hide_div1(event) {
    event.preventDefault(); // Prevent form submission

    var questionCount = parseInt(document.getElementById('que-count').value);
    var subContaint1 = document.getElementById('sub-containt1');
    var subContaint2 = document.getElementById('sub-containt2');

    // Hide sub-containt1
    subContaint1.style.display = 'none';

    // Clear previous questions
    subContaint2.innerHTML = '';

    // Generate new question fields
    for (var i = 1; i <= questionCount; i++) {
        var questionDiv = document.createElement('div');
        questionDiv.classList.add('entry-div');

        var questionLabel = document.createElement('label');
        questionLabel.setAttribute('for', 'que' + i);
        questionLabel.textContent = 'Question ' + i;
        questionDiv.appendChild(questionLabel);

        var questionTextarea = document.createElement('textarea');
        questionTextarea.setAttribute('id', 'que' + i);
        questionDiv.appendChild(questionTextarea);

        var optionLabels = ['a', 'b', 'c', 'd'];
        for (var j = 0; j < optionLabels.length; j++) {
            var optionLabel = document.createElement('label');
            optionLabel.setAttribute('for', 'op' + (j + 1) + '-' + i);
            optionLabel.textContent = optionLabels[j] + '.';
            questionDiv.appendChild(optionLabel);

            var optionInput = document.createElement('input');
            optionInput.setAttribute('type', 'text');
            optionInput.setAttribute('name', 'op' + (j + 1) + '-' + i);
            optionInput.setAttribute('id', 'op' + (j + 1) + '-' + i);
            questionDiv.appendChild(optionInput);
        }

        var answerLabel = document.createElement('label');
        answerLabel.setAttribute('for', 'ans' + i);
        answerLabel.textContent = 'Answer';
        questionDiv.appendChild(answerLabel);

        var answerSelect = document.createElement('select');
        answerSelect.setAttribute('name', 'ans' + i);
        answerSelect.setAttribute('id', 'ans' + i);
        answerSelect.classList.add('ans');
        
        var answerOptions = ['a', 'b', 'c', 'd'];
        for (var k = 0; k < answerOptions.length; k++) {
            var option = document.createElement('option');
            option.setAttribute('value', answerOptions[k]);
            option.textContent = answerOptions[k];
            answerSelect.appendChild(option);
        }

        

        // Append <hr> for visual separation
        var hrline = document.createElement('hr');
        hrline.setAttribute('id','que-hr-line');

        questionDiv.appendChild(answerSelect);
        subContaint2.appendChild(questionDiv);
        subContaint2.appendChild(hrline);
        
        
    }
    
}