package com.example.twoactivity;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.util.Log;
import android.view.View;
import android.widget.EditText;
import android.widget.TextView;

public class MainActivity extends AppCompatActivity {
    private static final String LOG_TAG = MainActivity.class.getSimpleName();

    public static final String EXTRA_MESSAGE = "com.example.android.twoactivities.extra.MESSAGE";
    public static final int TEXT_REQUEST=1;

    private TextView tampiltexthead;
    private TextView tampiltext;
    private EditText Edit;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        Edit=(EditText)findViewById(R.id.edit);
        tampiltexthead=(TextView) findViewById(R.id.header_reply);
        tampiltext=(TextView) findViewById(R.id.message_reply);

        if (savedInstanceState !=null){
            boolean isVisible = savedInstanceState.getBoolean("reply_visible");
            if(isVisible){
                tampiltexthead.setVisibility(View.VISIBLE);
                tampiltext.setText(savedInstanceState.getString("reply_text"));
                tampiltext.setVisibility(View.VISIBLE);
            }
        }
    }
    @Override
    public void onStart(){
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
    protected void onStop() {
        super.onStop();
    }

    @Override
    public void onDestroy() {
        super.onDestroy();
        Log.d(LOG_TAG, "onDestroy");
    }
    @Override
    public void onSaveInstanceState(Bundle outState) {
        super.onSaveInstanceState(outState);
        if (tampiltexthead.getVisibility() == View.VISIBLE) {
            outState.putBoolean("reply_visible", true);
            outState.putString("reply_text",tampiltext.getText().toString());
        }
    }

    public void kirim(View view) {
        Log.d(LOG_TAG,"Pencet tombol!");
        Intent kirim1=new Intent(this, MainActivity2.class);
        String message = Edit.getText().toString();

        kirim1.putExtra(EXTRA_MESSAGE, message);
        startActivityForResult(kirim1,TEXT_REQUEST);
    }
    public void onActivityResult(int requestCode,int resultCode,Intent data){
        super.onActivityResult(requestCode,resultCode,data);
        if (requestCode==TEXT_REQUEST){
            if (resultCode==RESULT_OK){
                String balas=data.getStringExtra(MainActivity2.EXTRA_REPLY);
                tampiltexthead.setVisibility(View.VISIBLE);
                tampiltext.setText(balas);
                tampiltext.setVisibility(View.VISIBLE);
            }
        }
    }
}