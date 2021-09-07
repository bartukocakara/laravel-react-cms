import DataTable from './datatable/Datatable'

const Managers = () => {
    return (
        <div className="col-xl-12 col-lg-12 col-sm-12 layout-spacing">
            <DataTable
                fetchUrl="/api/testing"
                columns={["name", "address", "issuer_name", "created_at"]}
            ></DataTable>
        </div>
    )
}

export default Managers
