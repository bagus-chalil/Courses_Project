package com.example.twoactivity;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.util.Log;
import android.view.View;
import android.widget.TextView;
import android.widget.EditText;

public class MainActivity2 extends AppCompatActivity {
    public static final String LOG_TAG =MainActivity2.class.getSimpleName();
    public static final  String EXTRA_REPLY = "com.example.android.twoactivities.extra.REPLY";
    private EditText balas1;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main2);
        balas1=(EditText) findViewById(R.id.edit1);

        Intent kirim1=getIntent();
        String message = kirim1.getStringExtra(MainActivity.EXTRA_MESSAGE);
        TextView textView=(TextView) findViewById(R.id.message1);
        textView.setText(message);

    }

    public void kembali(View view) {
        String balas= balas1.getText().toString();
        Intent balas1=new Intent();
        balas1.putExtra(EXTRA_REPLY,balas);
        setResult(RESULT_OK,balas1);
        Log.d(LOG_TAG, "End MainActivity2");
        finish();
    }
    @Override
    protected void onStart() {
        super.onStart();
        Log.d(LOG_TAG, "onStart");
    }
    @Override
    public void onRestart() {
        super.onRestart();
        Log.d(LOG_TAG, "onRestart");
    }
    @Override
    public void onResume() {
        super.onResume();
        Log.d(LOG_TAG, "onResume");
    }
    @Override
    public void onPause() {
        super.onPause();
        Log.d(LOG_TAG, "onPause");
    }
    @Override
    public void onStop() {
        super.onStop();
        Log.d(LOG_TAG, "onStop");
    }
    @Override
    public void onDestroy() {
        super.onDestroy();
        Log.d(LOG_TAG, "onDestroy");
    }
}
