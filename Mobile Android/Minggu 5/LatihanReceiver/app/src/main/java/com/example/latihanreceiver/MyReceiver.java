package com.example.latihanreceiver;

import android.content.BroadcastReceiver;
import android.content.Context;
import android.content.Intent;
import android.widget.Toast;

public class MyReceiver extends BroadcastReceiver {
    private static final String ACTION_CUSTOM_BROADCAST =
            "com.example.android.powerreceiver.ACTION_CUSTOM_BROADCAST";

    public MyReceiver() {
    }

    @Override
    public void onReceive(Context context, Intent intent) {
        String intentAction = intent.getAction();
        String pesan = null;
        switch (intentAction){
            case Intent.ACTION_POWER_CONNECTED:
                pesan = context.getString(R.string.power_connect);
                break;
            case Intent.ACTION_POWER_DISCONNECTED:
                pesan = context.getString(R.string.power_disconnect);
                break;
            case ACTION_CUSTOM_BROADCAST:
                pesan = context.getString(R.string.custom_broadcast_toast);
                break;
        }
        Toast.makeText(context, pesan, Toast.LENGTH_SHORT).show();
    }

}
