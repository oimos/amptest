import React, { Component } from 'react';
import ReactDOM from 'react-dom';

export default class Example extends Component {
    constructor(props){
      super(props);
      this.state = {
        today: 'yes'
      }
    }
    render() {
        return (
            <div className="container">
                <div className="row justify-content-center">
                    <div className="col-md-8">
                        <div className="card">
                            <div className="card-header">Example Component</div>

                            <div className="card-body text-center">
                                I'm an example component!
                                {this.state.today}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        );
    }
}

if (document.getElementById('example')) {
    ReactDOM.render(<Example />, document.getElementById('example'));
}
