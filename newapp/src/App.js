import React from 'react';
import logo from './GRABW_Logo.jpg';
import './App.css';

const tableStyle = {
	display : "inline-block",
	float : "left"
};
const tableStyle2 = {
	display : "inline-block",
	float : "right"
};



function App() {
	return (
		<div className="App">
			<img src={logo} alt="Logo"/>
<<<<<<< HEAD
			<h1>Spot My Spot</h1>
			<center>
				<p>
					Green spot: Available
				</p>
				<p>
					Red spot: Unavailable
				</p>
			</center>

		<br/>
		<center>
			<table border = "5" cellSpacing="0" cellPadding="0" >
				<tr>
					<td height="100" align="center">unfilled</td>
					<td height="100" align="center">unfilled</td>
					<td height="100" align="center">unfilled</td>
					<td height="100" align="center">unfilled</td>
					<td height="100" align="center">unfilled</td>
					<td height="100" align="center">unfilled</td>
				</tr>
				<tr>
					<td height="100" align="center">unfilled</td>
					<td height="100" align="center">unfilled</td>
					<td height="100" align="center">unfilled</td>
					<td height="100" align="center">unfilled</td>
					<td height="100" align="center">unfilled</td>
					<td height="100" align="center">unfilled</td>
				</tr>
			</table>
			<br/> <br/>
			<table border = "5" cellSpacing="0" cellPadding="0" >
				<tr>
					<td height="50" align="center">unfilled</td>
					<td height="50" align="center">unfilled</td>
					<td height="50" align="center">unfilled</td>
					<td height="50" align="center">unfilled</td>
				</tr>
				<tr>
					<td height="50" align="center">unfilled</td>
					<td height="50" align="center">unfilled</td>
					<td height="50" align="center">unfilled</td>
					<td height="50" align="center">unfilled</td>
				</tr>
				<tr>
					<td height="50" align="center">unfilled</td>
					<td height="50" align="center">unfilled</td>
					<td height="50" align="center">unfilled</td>
					<td height="50" align="center">unfilled</td>
				</tr>
				<tr>
					<td height="50" align="center">unfilled</td>
					<td height="50" align="center">unfilled</td>
					<td height="50" align="center">unfilled</td>
					<td height="50" align="center">unfilled</td>
				</tr>
				<tr>
					<td height="50" align="center">unfilled</td>
					<td height="50" align="center">unfilled</td>
					<td height="50" align="center">unfilled</td>
					<td height="50" align="center">unfilled</td>
				</tr>
				<tr>
					<td height="50" align="center">unfilled</td>
					<td height="50" align="center">unfilled</td>
					<td height="50" align="center">unfilled</td>
					<td height="50" align="center">unfilled</td>
				</tr>
			</table>
		</center>
=======
			<h1>Team GRABW: Spot My Spot</h1>
			<table border = "5" width = "800" height = "100" style={tableStyle}>
				<tr>
					<td align="center">id: 1 Name: unfilled</td>
					<td align="center">id: 2 Name: unfilled</td>
					<td align="center">id: 3 Name: unfilled</td>
					<td align="center">id: 4 Name: unfilled</td>
					<td align="center">id: 5 Name: unfilled</td>
					<td align="center">id: 6 Name: unfilled</td>
				</tr>
				<tr>
					<td align="center">id: 7 Name: unfilled</td>
					<td align="center">id: 8 Name: unfilled</td>
					<td align="center">id: 9 Name: unfilled</td>
					<td align="center">id: 10 Name: unfilled</td>
					<td align="center">id: 11 Name: unfilled</td>
					<td align="center">id: 12 Name: unfilled</td>
				</tr>
			</table>
			
			<table border = "5" width = "800" height = "100" style={tableStyle2}>
				<tr>
					<td align="center">id: 13 Name: unfilled</td>
					<td align="center">id: 14 Name: unfilled</td>
					<td align="center">id: 15 Name: unfilled</td>
					<td align="center">id: 16 Name: unfilled</td>
					<td align="center">id: 17 Name: unfilled</td>
					<td align="center">id: 18 Name: unfilled</td>
				</tr>
				<tr>
					<td align="center">id: 19 Name: unfilled</td>
					<td align="center">id: 20 Name: unfilled</td>
					<td align="center">id: 21 Name: unfilled</td>
					<td align="center">id: 22 Name: unfilled</td>
					<td align="center">id: 23 Name: unfilled</td>
					<td align="center">id: 24 Name: unfilled</td>
				</tr>
			</table>

			<table border = "5" width = "800" height = "100" style={tableStyle}>
				<tr>
					<td align="center">id: 25 Name: unfilled</td>
					<td align="center">id: 26 Name: unfilled</td>
					<td align="center">id: 27 Name: unfilled</td>
					<td align="center">id: 28 Name: unfilled</td>
					<td align="center">id: 29 Name: unfilled</td>
					<td align="center">id: 30 Name: unfilled</td>
				</tr>
				<tr>
					<td align="center">id: 31 Name: unfilled</td>
					<td align="center">id: 32 Name: unfilled</td>
					<td align="center">id: 33 Name: unfilled</td>
					<td align="center">id: 34 Name: unfilled</td>
					<td align="center">id: 35 Name: unfilled</td>
					<td align="center">id: 36 Name: unfilled</td>
				</tr>
			</table>
>>>>>>> 735a4f0db84c5c5a5b6292d5f632b6df12d07641
		</div>
	);
}

export default App;
