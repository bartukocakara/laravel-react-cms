import {createStore, applyMiddleware} from 'redux'
import thunk from 'redux-thunk'
import {composeWithDevTools} from 'redux-devtools-extension'

import allReducer from './reducers'

const initalState = {

}

const middleware = [thunk]

const store = createStore(allReducer, initalState, composeWithDevTools(applyMiddleware(...middleware)))

export default store;