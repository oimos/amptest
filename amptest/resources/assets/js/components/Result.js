import React from 'react'
// import axios from 'axios';

export default class Result extends React.Component {
  render() {
    return(
      <ul>
        { this.props.cryptos.map((crypto, index) => <li key={index}>{crypto.name} | {crypto.price}</li>) }
      </ul>
    )
  }
}

// if (document.getElementById('app')) {
//   ReactDOM.render(<Result />, document.getElementById('app'));
// }