package com.example.android.materialmeresource;

import android.content.res.TypedArray;
import android.os.Bundle;
import androidx.appcompat.app.AppCompatActivity;
import androidx.recyclerview.widget.GridLayoutManager;
import androidx.recyclerview.widget.RecyclerView;
import androidx.recyclerview.widget.ItemTouchHelper;
import android.view.View;

import java.util.ArrayList;
import java.util.Collections;

public class MainActivity extends AppCompatActivity {

    private RecyclerView mRecyclerView;
    private ArrayList<Matsurat> mMatsuratData;
    private MatsuratAdapter mAdapter;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        mRecyclerView = (RecyclerView)findViewById(R.id.recyclerView);

        int gridColumnCount = getResources().getInteger(R.integer.grid_column_count);

        mRecyclerView.setLayoutManager(new GridLayoutManager(this, gridColumnCount));

        mMatsuratData = new ArrayList<>();

        mAdapter = new MatsuratAdapter(this, mMatsuratData);
        mRecyclerView.setAdapter(mAdapter);

        initializeData();

        // If there is more than one column, disable swipe to dismiss
        int swipeDirs;
        if(gridColumnCount > 5){
            swipeDirs = 0;
        } else {
            swipeDirs = ItemTouchHelper.LEFT | ItemTouchHelper.RIGHT;
        }

        ItemTouchHelper helper = new ItemTouchHelper(new ItemTouchHelper.SimpleCallback
                (ItemTouchHelper.LEFT | ItemTouchHelper.RIGHT | ItemTouchHelper.DOWN
                        | ItemTouchHelper.UP, swipeDirs) {
            @Override
            public boolean onMove(RecyclerView recyclerView, RecyclerView.ViewHolder viewHolder,
                                  RecyclerView.ViewHolder target) {

                int from = viewHolder.getAdapterPosition();
                int to = target.getAdapterPosition();

                Collections.swap(mMatsuratData, from, to);
                mAdapter.notifyItemMoved(from, to);
                return true;
            }

            @Override
            public void onSwiped(RecyclerView.ViewHolder viewHolder, int direction) {

                mMatsuratData.remove(viewHolder.getAdapterPosition());

                mAdapter.notifyItemRemoved(viewHolder.getAdapterPosition());
            }
        });

        helper.attachToRecyclerView(mRecyclerView);
    }



    private void initializeData() {

        String[] matsuratList = getResources().getStringArray(R.array.matsurat_titles);
        String[] matsuratInfo = getResources().getStringArray(R.array.matsurat_info);
        TypedArray matsuratImageResources = getResources().obtainTypedArray(R.array.matsurat_images);

        mMatsuratData.clear();


        for(int i=0; i<matsuratList.length; i++){
            mMatsuratData.add(new Matsurat(matsuratList[i], matsuratInfo[i],
                    matsuratImageResources.getResourceId(i,0)));
        }

        matsuratImageResources.recycle();

        mAdapter.notifyDataSetChanged();
    }

}
