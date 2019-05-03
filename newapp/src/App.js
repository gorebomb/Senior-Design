import React, {Component} from 'react';
import Data from './data.json';

var data = Data;

class App extends React.Component{
	
	render() {
		return <div><pre>{JSON.stringify(data, null, 2) }</pre></div>;
	}
}

export default App;
