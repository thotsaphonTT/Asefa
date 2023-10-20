<div class="card p-5 mt-3 " style="background: transparent; border: none;">
	<div class="container p-5">
		<div class="body-cal shadow-lg rounded-circle">
			<div class="calculator">
				<div class="cal-input" id="result">0</div>
				<div>
					<div>
						<div>
							<button class="btn-cal-ac" onclick="clearResult()">AC</button>
							<button class="btn-cal-del" onclick="deleteLastDigit()">DEL</button>
							<button class="btn-cal-oper" onclick="appendOperator('%')">%</button>
							<button class="btn-cal-oper" onclick="appendOperator('/')">/</button>
						</div>
						<div>
							<button class="btn-cal" onclick="appendNumber('7')">7</button>
							<button class="btn-cal" onclick="appendNumber('8')">8</button>
							<button class="btn-cal" onclick="appendNumber('9')">9</button>
							<button class="btn-cal-oper" onclick="appendOperator('*')">x</button>
						</div>
						<div>
							<button class="btn-cal" onclick="appendNumber('4')">4</button>
							<button class="btn-cal" onclick="appendNumber('5')">5</button>
							<button class="btn-cal" onclick="appendNumber('6')">6</button>
							<button class="btn-cal-oper" onclick="appendOperator('-')">-</button>
						</div>
						<div>
							<button class="btn-cal" onclick="appendNumber('1')">1</button>
							<button class="btn-cal" onclick="appendNumber('2')">2</button>
							<button class="btn-cal" onclick="appendNumber('3')">3</button>
							<button class="btn-cal-oper" onclick="appendOperator('+')">+</button>
						</div>
						<div>
							<button class="zero" onclick="appendNumber('0')">0</button>
							<button class="btn-cal" onclick="appendDecimal('.')">.</button>
							<button class="btn-cal" style="color:orangered;" onclick="calculateResult()">=</button>
						</div>
					</div>
				</div>
			</div>
			<div class="card w-50 ms-3 text-center">
				<!-- เพิ่มส่วน HTML สำหรับแสดงประวัติคำนวณ -->
				<div id="calculationHistory" class="cal-history">
					<b>ประวัติการคำนวน</b>
					<ui class="text-start" id="historyList"></ui class="text-start">
					<button class="cal-input-chit" onclick="clearHistory()">ลบประวัติ</button>
				</div>
				<!-- สิ้นสุดส่วน HTML สำหรับแสดงประวัติคำนวณ -->
			</div>
		</div>
	</div>
</div>

