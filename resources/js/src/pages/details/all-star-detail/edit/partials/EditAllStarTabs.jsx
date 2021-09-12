import { Tabs, Tab } from 'react-bootstrap'

const EditAllStarTabs = () => {
    return (
        <>
            <Tab eventKey="home" title="Home">
                Home
            </Tab>
            <Tab eventKey="profile" title="Profile">
                Profile
            </Tab>
            <Tab eventKey="contact" title="Contact">
                Contact
            </Tab>
        </>
    )
}

export default EditAllStarTabs
