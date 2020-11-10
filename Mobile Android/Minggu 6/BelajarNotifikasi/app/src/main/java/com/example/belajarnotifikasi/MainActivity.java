package com.example.belajarnotifikasi;

import androidx.appcompat.app.AppCompatActivity;
import androidx.core.app.NotificationCompat;

import android.app.Notification;
import android.app.NotificationManager;
import android.app.PendingIntent;
import android.content.BroadcastReceiver;
import android.content.Context;
import android.content.Intent;
import android.content.IntentFilter;
import android.graphics.Bitmap;
import android.graphics.BitmapFactory;
import android.net.Uri;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;

public class MainActivity extends AppCompatActivity {
    Button buttonnotifikasi;
    Button buttoncancel;
    Button buttonupdate;

    private NotificationManager mnotifikasiManager;
    private static final int NOTIFICATION_ID = 0;
    private static final String NOTIFICATION_GUIDE_URL =
            "https://developer.android.com/design/patterns/notifications.html";
    private static final String ACTION_UPDATE_NOTIFICATION =
            "com.example.android.belajarnotifikasi.ACTION_UPDATE_NOTIFICATION";
    private static final String ACTION_CANCEL_NOTIFICATION =
            "com.example.android.belajarnotifikasi.ACTION_CANCEL_NOTIFICATION";
    private NotificationReceiver mReceiver = new NotificationReceiver();

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        mnotifikasiManager = (NotificationManager) getSystemService(NOTIFICATION_SERVICE);

        buttonnotifikasi=(Button) findViewById(R.id.notifikasi);
        buttoncancel=(Button) findViewById(R.id.batal);
        buttonupdate=(Button) findViewById(R.id.ubah);

        buttonnotifikasi.setEnabled(true);
        buttonupdate.setEnabled(false);
        buttoncancel.setEnabled(false);

        IntentFilter intentFilter = new IntentFilter();
        intentFilter.addAction(ACTION_UPDATE_NOTIFICATION);
        intentFilter.addAction(ACTION_CANCEL_NOTIFICATION);
        registerReceiver(mReceiver, intentFilter);


        buttonnotifikasi.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                kirimnotifikasi();
            }
        });
        buttoncancel.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                batalnotifikasi();
            }
        });
        buttonupdate.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                ubahnotifikasi();
            }
        });

    }

    @Override
    protected void onDestroy() {
        unregisterReceiver(mReceiver);
        super.onDestroy();
    }

    private void ubahnotifikasi() {
        Bitmap androidImage = BitmapFactory
                .decodeResource(getResources(),R.drawable.matsurat);

        Intent notifikasiIntent = new Intent(this, MainActivity.class);
        PendingIntent notificationPendingIntent = PendingIntent.getActivity(this,
                NOTIFICATION_ID, notifikasiIntent, PendingIntent.FLAG_UPDATE_CURRENT);

        Intent cancelIntent = new Intent(ACTION_CANCEL_NOTIFICATION);
        PendingIntent cancelPendingIntent = PendingIntent.getBroadcast
                (this, NOTIFICATION_ID, cancelIntent, PendingIntent.FLAG_ONE_SHOT);

        Intent learnMoreIntent = new Intent(Intent.ACTION_VIEW, Uri.parse(NOTIFICATION_GUIDE_URL));
        PendingIntent learnMorePendingIntent = PendingIntent.getActivity
                (this, NOTIFICATION_ID, learnMoreIntent, PendingIntent.FLAG_ONE_SHOT);

        NotificationCompat.Builder notifyBuilder = new NotificationCompat.Builder(this)
                .setContentTitle("Kamu memeiliki sebuah Notifikasi")
                .setContentText("Tetap Semangat dan lanjutkan belajarmu :)")
                .setContentIntent(notificationPendingIntent)
                .setPriority(NotificationCompat.PRIORITY_DEFAULT)
                .setDefaults(NotificationCompat.DEFAULT_ALL)
                .setSmallIcon(R.drawable.ic_android)
                .setDeleteIntent(cancelPendingIntent)
                .setStyle(new NotificationCompat.BigPictureStyle()
                        .bigPicture(androidImage)
                        .setBigContentTitle("Notification Updated!"));

        buttonnotifikasi.setEnabled(false);
        buttonupdate.setEnabled(false);
        buttoncancel.setEnabled(true);

        Notification myNotification = notifyBuilder.build();
        mnotifikasiManager.notify(NOTIFICATION_ID, myNotification);
    }


    private void batalnotifikasi() {
        mnotifikasiManager.cancel(NOTIFICATION_ID);

        buttonnotifikasi.setEnabled(true);
        buttonupdate.setEnabled(false);
        buttoncancel.setEnabled(false);
    }

    private void kirimnotifikasi() {
        Intent notifikasiIntent = new Intent(this, MainActivity.class);
        PendingIntent notificationPendingIntent = PendingIntent.getActivity(this,
                NOTIFICATION_ID, notifikasiIntent, PendingIntent.FLAG_UPDATE_CURRENT);

        Intent cancelIntent = new Intent(ACTION_CANCEL_NOTIFICATION);
        PendingIntent cancelPendingIntent = PendingIntent.getBroadcast
                (this, NOTIFICATION_ID, cancelIntent, PendingIntent.FLAG_ONE_SHOT);

        Intent learnMoreIntent = new Intent(Intent.ACTION_VIEW, Uri.parse(NOTIFICATION_GUIDE_URL));
        PendingIntent learnMorePendingIntent = PendingIntent.getActivity
                (this, NOTIFICATION_ID, learnMoreIntent, PendingIntent.FLAG_ONE_SHOT);

        Intent updateIntent = new Intent(ACTION_UPDATE_NOTIFICATION);
        PendingIntent updatePendingIntent = PendingIntent.getBroadcast
                (this, NOTIFICATION_ID, updateIntent, PendingIntent.FLAG_ONE_SHOT);

        NotificationCompat.Builder notifyBuilder = new NotificationCompat.Builder(this)
                .setContentTitle("Kamu memeiliki sebuah Notifikasi")
                .setContentText("Tetap Semangat dan lanjutkan belajarmu :)")
                .setContentIntent(notificationPendingIntent)
                .setPriority(NotificationCompat.PRIORITY_HIGH)
                .setDefaults(NotificationCompat.DEFAULT_ALL)
                .addAction(R.drawable.ic_info, getString(R.string.info),
                        learnMorePendingIntent)
                .addAction(R.drawable.ic_update, getString(R.string.update), updatePendingIntent)
                .setDeleteIntent(cancelPendingIntent)
                .setSmallIcon(R.drawable.ic_android);

        mnotifikasiManager.notify(NOTIFICATION_ID, notifyBuilder.build());
        buttonnotifikasi.setEnabled(false);
        buttonupdate.setEnabled(true);
        buttoncancel.setEnabled(true);
    }

    private class NotificationReceiver extends BroadcastReceiver {

        @Override
        public void onReceive(Context context, Intent intent) {
            String action = intent.getAction();
            switch (action){
                case ACTION_CANCEL_NOTIFICATION:
                    batalnotifikasi();
                    break;
                case ACTION_UPDATE_NOTIFICATION:
                    ubahnotifikasi();
                    break;
            }
        }
    }

}