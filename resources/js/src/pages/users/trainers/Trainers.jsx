import axios from 'axios'
import React, { useState } from 'react'

const Trainers = () => {

    const [appId, setAppId] = useState('6d4a7e9374a76c15260fcc75e315b0b9')
    const [appSecret, setAppSecret] = useState('b46a67571aa1e7ef5641dc3fa6f1712a')
    const [loading, setLoading] = useState(true);

    const submitValue = () => {
        const authData = {
                'app_id' : appId,
                'app_secret' : appSecret,
                }
        axios.post('api/testing', authData)
        .then((response) => console.log(response.data))
        .then(setLoading(false))
        .catch(error => {
            console.error('There was an error!', error);
        });
    }
    const loadingSpinner = (<div class="col-12 d-block spinner-border text-primary m-auto" role="status">
                                <span class="visually-hidden">Loading...{loading}</span>
                            </div>)
    return (
        <div className="row">
            <div className="col-md-6">
                <h6>Request</h6>
                    <div className="row">
                    <div className="col-md-6">
                        <div className="form-group">
                            <label>App Id</label>
                            <input type="text" name="app_id" onChange={(e) => setAppId(e.target.value)} className="form-control form-control-alternative" placeholder="" value={appId} />
                        </div>
                    </div>
                    <div className="col-md-6">
                        <div className="form-group">
                            <label>App Secret</label>
                        <input type="text" className="form-control form-control-alternative" onChange={(e) => setAppSecret(e.target.value)} value={appSecret} />
                        </div>
                    </div>
                    <div className="col-md-6">
                        <input type="submit" value="send" onClick={submitValue} className="btn btn-primary" />
                    </div>
                    </div>
            </div>
            <div className="col-md-6">
                <h6>Response</h6>
                {loading ? "Results found" : loadingSpinner }

            </div>
        </div>
    )
}

export default Trainers
