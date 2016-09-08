//ref: https://www.kenneth-truyers.net/2013/04/27/javascript-namespaces-and-modules/

/*
 * This js generates new namespace for victutor.com
 * Everytime we have a new js file, we should generate
 * its own namespace
 */

// create the root namespace and making sure we're not overwriting it
var victutor = victutor || {};

victutor.createNS = function (namespace) {
    var nsparts = namespace.split(".");
    var parent = victutor;
 
    // we want to be able to include or exclude the root namespace 
    // So we strip it if it's in the namespace
    if (nsparts[0] === "victutor") {
        nsparts = nsparts.slice(1);
    }
 
    // loop through the parts and create 
    // a nested namespace if necessary
    for (var i = 0; i < nsparts.length; i++) {
        var partname = nsparts[i];
        // check if the current parent already has 
        // the namespace declared, if not create it
        if (typeof parent[partname] === "undefined") {
            parent[partname] = {};
        }
        // get a reference to the deepest element 
        // in the hierarchy so far
        parent = parent[partname];
    }
    // the parent is now completely constructed 
    // with empty namespaces and can be used.
    return parent;
};