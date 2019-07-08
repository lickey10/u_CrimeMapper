using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class MapController : MonoBehaviour
{
    public BingMapsTexture Map;

    LocationService locationService = new LocationService();

    //Fort Collins - 40.5577532,-105.0404223

    void Start()
    {
        //get current location
        StartCoroutine(locationService.GetLocation(result => {
            // callBack is going to be null until it’s set
            if (result != null)
            {
                if (result == -1)
                {
                    //failed
                    updateMap(9.4166f, 82.5208f);//Bocas Del Toro

                    // Now callBack acts as an int
                    print(result);
                }

                if (result == 1)
                {
                    //success
                    updateMap(locationService.Latitude, locationService.Longitude);
                }
            }
        }));
    }

    void updateMap(float lat, float lon)
    {
        Map.latitude = lat;
        Map.longitude = lon;
        Map.initialZoom = 9;

        Map.ComputeInitialSector();
    }
}
