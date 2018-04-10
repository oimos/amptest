import React from 'react'

export default class Search extends React.Component {
  constructor(props){
    super(props);
    this.state = {
      inputValue: ''
    }
  }
  render() {
    return(
      <form onSubmit={this.props.onSubmit} action="/amp_orm/" method="get">
        <input type="text" onChange={(evt) => this.props.onChange(evt)} value={this.props.value}/>
        <input type="submit" value="SEARCH"/>
      </form>
    )
  }
}

// if (document.getElementById('app')) {
//   ReactDOM.render(<Search />, document.getElementById('app'));
// }