export function getParentNameRoute(childNameRoute) {
    let partsName = childNameRoute.split("-");

    return partsName[0];
}
