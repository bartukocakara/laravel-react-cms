import { useState } from 'react';
import { Tabs, Tab } from 'react-bootstrap'

const EditAllStarNavs = () => {
    const [key, setKey] = useState('home');

    return (
        <Tabs
            id="controlled-tab-example"
            activeKey={key}
            onSelect={(k) => setKey(k)}
            className="mb-3"
        >
        <Tab eventKey="home" title="Home">
            Home
        </Tab>
        <Tab eventKey="profile" title="Profile">
            Profile
        </Tab>
        <Tab eventKey="contact" title="Contact">
            Contact
        </Tab>
      </Tabs>
    )
}

export default EditAllStarNavs
