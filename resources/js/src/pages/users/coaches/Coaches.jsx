import React from 'react'
import DataTable from './datatable/Datatable'

const Coaches = () => {
    return (
        <div className="col-xl-12 col-lg-12 col-sm-12 layout-spacing">
            <h6>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint mollitia animi possimus fugit! Obcaecati ad expedita qui labore omnis provident.</h6>
            <DataTable
                fetchUrl="/api/testing"
                columns={["name", "address", "issuer_name", "created_at"]}
            ></DataTable>

        </div>
    )
}

export default Coaches
