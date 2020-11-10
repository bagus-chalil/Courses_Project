package com.example.implicitintents;

import androidx.appcompat.app.AppCompatActivity;
import androidx.core.app.ShareCompat;

import android.content.Intent;
import android.net.Uri;
import android.os.Bundle;
import android.util.Log;
import android.view.View;
import android.widget.EditText;

public class MainActivity extends AppCompatActivity {
    private EditText editweb;
    private EditText editfolder;
    private EditText editshare;


    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        editweb=(EditText) findViewById(R.id.text_web);
        editfolder=(EditText) findViewById(R.id.text_folder);
        editshare= (EditText) findViewById(R.id.text_share);
    }

    public void openweb(View view) {
        String Web=editweb.getText().toString();
        Uri webpage = Uri.parse(Web);
        Intent url =new Intent(Intent.ACTION_VIEW,webpage);

        if (url.resolveActivity(getPackageManager()) !=null){
            startActivity(url);
        }else{
            Log.d("ImplicitIntens","Can't handle this intent!");
        }
    }

    public void openloc(View view) {
        String fol=editfolder.getText().toString();
        Uri folder= Uri.parse("geo:0,0?p=" +fol);
        Intent file = new Intent(Intent.ACTION_VIEW,folder);

        if (file.resolveActivity(getPackageManager()) !=null){
            startActivity(file);
        }else{
            Log.d("ImplicitIntens", "Can't handle this Intent! ");
        }
    }

    public void openshare(View view) {
        String shr=editshare.getText().toString();
        String shareType ="text/plain";

        ShareCompat.IntentBuilder
                .from(this)
                .setType(shareType)
                .setChooserTitle("Share this text with: ")
                .setText(shr)
                .startChooser();

    }
}