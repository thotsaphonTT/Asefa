let currentInput = "";
let currentOperator = "";
let previousInput = "";
let calculationHistory = []; // เก็บประวัติการคำนวณด้วย JSON

function updateResult() {
    document.getElementById("result").textContent = currentInput;
}

function appendNumber(number) {
    if (currentInput === "0") {
        currentInput = number;
    } else {
        currentInput += number;
    }
    updateResult();
}

function appendOperator(operator) {
    if (currentOperator !== "") {
        calculateResult();
    }
    if (operator === '%') {
        currentOperator = 'mod'; 
    } else {
        currentOperator = operator;
    }
    previousInput = currentInput;
    currentInput = "0";
    updateResult();
}

function clearResult() {
    currentInput = "0";
    currentOperator = "";
    previousInput = "";
    updateResult();
}

function calculateResult() {
    const num1 = parseFloat(previousInput);
    const num2 = parseFloat(currentInput);

    if (currentOperator === "+") {
        currentInput = num1 + num2;
    } else if (currentOperator === "-") {
        currentInput = num1 - num2;
    } else if (currentOperator === "*") {
        currentInput = num1 * num2;
    } else if (currentOperator === "/") {
        currentInput = num1 / num2;
    } else if (currentOperator === 'mod') {
        currentInput = num1 % num2; // คำนวณ MOD
    }

    if (Number.isInteger(currentInput)) {
        result = currentInput
    } else {
        result = currentInput.toFixed(2)
    }
    calculationHistory.push({
        num1: num1,
        operator: currentOperator,
        num2: num2,
        result: result,
    });

    currentInput = result
    currentOperator = "";
    previousInput = "";
    updateResult();

    displayCalculationHistory();
}

function deleteLastDigit() {
    currentInput = currentInput.slice(0, -1); // ลบตัวเลขที่ตำแหน่งสุดท้าย
    if (currentInput === "") {
        currentInput = "0"; // ถ้าไม่มีตัวเลขเหลือให้กำหนดเป็น 0
    }
    updateResult();
}

function appendDecimal() {
    if (currentInput.indexOf('.') === -1) {
        currentInput += '.';
        updateResult();
    }
}

function displayCalculationHistory() {
    displayLastFiveCalculations();
}

function displayLastFiveCalculations() {
    const historyList = document.getElementById("historyList");
    historyList.innerHTML = "";

    // หากประวัติการคำนวณมีมากกว่า 5 รายการ ให้กำหนดเริ่มต้นที่ตำแหน่งที่คุณต้องการ
    const startIndex = Math.max(0, calculationHistory.length - 5);

    for (let i = startIndex; i < calculationHistory.length; i++) {
        const calc = calculationHistory[i];
        const listItem = document.createElement("li");
        listItem.textContent = `${calc.num1} ${calc.operator} ${calc.num2} = ${calc.result}`;
        historyList.appendChild(listItem);
    }
}

function clearHistory() {
    calculationHistory = []; // ล้างประวัติการคำนวณ
    displayCalculationHistory(); // อัปเดตแสดงประวัติ
}

