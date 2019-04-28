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
		</div>
	);
}

export default App;
