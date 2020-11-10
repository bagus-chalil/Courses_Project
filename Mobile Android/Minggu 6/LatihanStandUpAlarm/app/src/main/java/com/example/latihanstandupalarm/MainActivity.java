package com.example.latihanstandupalarm;

import androidx.appcompat.app.AppCompatActivity;
import androidx.core.app.NotificationCompat;

import android.app.AlarmManager;
import android.app.NotificationManager;
import android.app.PendingIntent;
import android.content.Intent;
import android.os.Bundle;
import android.os.SystemClock;
import android.widget.Button;
import android.widget.CompoundButton;
import android.widget.Toast;
import android.widget.ToggleButton;

public class MainActivity extends AppCompatActivity {


    private static final int NOTIFICATION_ID = 0;
    private NotificationManager mnotifikasiManager;
    private String context;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        ToggleButton btn_alarm = (ToggleButton) findViewById(R.id.btnAlarm);

        mnotifikasiManager = (NotificationManager) getSystemService(NOTIFICATION_SERVICE);
        final AlarmManager alarmManager = (AlarmManager) getSystemService(ALARM_SERVICE);

        Intent notifikasiIntent = new Intent(this, AlarmReceiver.class);
        boolean alarmUp = (PendingIntent.getBroadcast(this, 0, notifikasiIntent,
                PendingIntent.FLAG_NO_CREATE) != null);

        btn_alarm.setChecked(alarmUp);

        final PendingIntent notifyPendingIntent = PendingIntent.getBroadcast
                (this, NOTIFICATION_ID, notifikasiIntent, PendingIntent.FLAG_UPDATE_CURRENT);

        btn_alarm.setOnCheckedChangeListener(
                new CompoundButton.OnCheckedChangeListener() {
                    @Override
                    public void onCheckedChanged(CompoundButton compoundButton,
                                                 boolean isChecked) {
                        String toastMessage;
                        if(isChecked){

                            long triggerTime = SystemClock.elapsedRealtime()
                                    + AlarmManager.INTERVAL_FIFTEEN_MINUTES;

                            long repeatInterval = AlarmManager.INTERVAL_FIFTEEN_MINUTES;

                            alarmManager.setInexactRepeating(AlarmManager.ELAPSED_REALTIME_WAKEUP,
                                    triggerTime, repeatInterval, notifyPendingIntent);

                            toastMessage = getString(R.string.alarm_aktif);
                        } else {
                            alarmManager.cancel(notifyPendingIntent);
                            mnotifikasiManager.cancelAll();

                            toastMessage = getString(R.string.alarm_nonaktif);
                        }
                        Toast.makeText(MainActivity.this, toastMessage, Toast.LENGTH_SHORT)
                                .show();
                    }
                });

    }
    }
